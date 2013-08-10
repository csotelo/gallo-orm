<?php
/**
 * SQLObject is an object-relational mapper for Php5
 * 
 * PhpSqlObject Copyright (C) 2009,  Carlos Eduardo Sotelo Pinto
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *  
 * $Id: model.php 16 2009-09-13 05:42:28Z krlosaqp $
 */

class Model
{
	public function __construct()
	{
		global $driver;
		global $database;
		global $username;
		global $password;
		global $hostname;
		$this->__connection = new Connection ($driver, $database, $username, $password, $hostname);
	}
	
	public function __destruct()
	{}
	
	public function query ($string)
	{}
	
	public function find ($type = 'all', $options)
	{}

	public function read ($id, $options)
	{}
	
	public function update ($options)
	{}
	
	public function safeField ($options)
	{}
	
	public function save ()
	{}
	
	public function delete ()
	{}

	protected function _generateFieldString ($sequence)
	{}
	
	protected function _generateWhereString ($sequence)
	{}
	
	protected function _generateOrderString ($sequence)
	{}
	
	protected function _generateSaveString ($sequence)
	{}
	
	protected function _generateUpdateString ($sequence)
	{}
}