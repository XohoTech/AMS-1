<?php

/**
 * Mint Import Controller
 * 
 * PHP version 5
 * 
 * @category   AMS
 * @package    CI
 * @subpackage Controller
 * @author     Nouman Tayyab <nouman@geekschicago.com>
 * @license    AMS http://ams.avpreserve.com
 * @version    GIT: <$Id>
 * @link       http://ams.avpreserve.com
 */

/**
 * Mintimport Class
 *
 * @category   Class
 * @package    CI
 * @subpackage Controller
 * @author     Nouman Tayyab <nouman@geekschicago.com>
 * @license    AMS http://ams.avpreserve.com
 * @link       http://ams.avpreserve.com
 */
class Mintimport extends CI_Controller
{

	public $mint_path;
	public $temp_path;

	/**
	 * Constructor
	 * 
	 * Load Models, Set values for global variables.
	 * 
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('assets_model');
		$this->load->model('cron_model');
		$this->load->model('mint_model', 'mint');
		$this->mint_path = 'assets/mint_import/';
		$this->temp_path = 'temp/';
	}

	/**
	 * Unzip and store all the mint info imported files.
	 * 
	 */
	function process_mint_dir()
	{
		set_time_limit(0);
		@ini_set("memory_limit", "2000M"); # 2GB
		@ini_set("max_execution_time", 999999999999);
		$files = glob($this->mint_path . '*.zip');
		foreach ($files as $file)
		{
			$zip = new ZipArchive;
			$res = $zip->open($file);
			if ($res === TRUE)
			{
				$zip->extractTo($this->mint_path . 'unzipped/');
				$zip->close();
			}
			else
			{
				myLog('Something went wrong  while extracting zip file.');
			}
		}
		myLog('Succesfully unzipped all files.');
		$this->load->helper('directory');
		$map = directory_map($this->mint_path . 'unzipped/', 2);
		foreach ($map as $index => $directory)
		{
			foreach ($directory as $file)
			{
				$path = $index . '/' . $file;
				$db_info = $this->mint->get_import_info_by_path($path);
				if ( ! $db_info)
				{
					$mint_info = array('folder' => $index, 'path' => $path, 'is_processed' => 0, 'status_reason' => 'Not processed');
					$this->mint->insert_import_info($mint_info);
				}
				else
					myLog('Already in db.');
			}
		}
		myLog('All mint files info stored. Folder Path:' . $this->mint_path);
		$this->import_mint_files();
	}

	/**
	 * Import mint transformed files.
	 * 
	 */
	function import_mint_files()
	{
		$result = $this->mint->get_files_to_import();
		if ($result)
		{
			foreach ($result as $row)
			{
				$this->mint->update_mint_import_file($row->id, array('processed_at' => date('Y-m-d H:m:i'), 'status_reason' => 'Processing'));
				$this->parse_xml_file($row->path);
				$this->mint->update_mint_import_file($row->id, array('is_processed' => 1, 'status_reason' => 'Complete'));
			}
		}
		else
		{
			myLog('No file available for importing.');
		}
	}

	/**
	 * Parse XML file for importing.
	 * 
	 * @param string $path file path
	 */
	function parse_xml_file($path)
	{
		$file_content = file_get_contents($this->mint_path . 'unzipped/' . $path);
		$xml_string = @simplexml_load_string($file_content);
		unset($file_content);
		$xmlArray = xmlObjToArr($xml_string);
		$station_id = 1;
		$asset_id = $this->import_asset_info($station_id, $xmlArray['children']);
		if ($asset_id)
			$this->import_instantiation_info($asset_id, $xmlArray);
		log('Successfully imported all the information to AMS');
		debug($xmlArray);
	}

	function import_asset_info($station_id, $xmlArray)
	{
		debug($xmlArray,FALSE);
		// Insert Asset
		// Insert Asset Type
		foreach ($xmlArray['pbc:pbcoreassettype'] as $row)
		{
			debug($row);
		}
	}

	function import_instantiation_info($asset_id, $xmlArray)
	{
		
	}

	function delete_temp_files()
	{
		$files = glob($this->temp_path . '*');
		foreach ($files as $file)
		{
			unlink($file);
		}
	}

}