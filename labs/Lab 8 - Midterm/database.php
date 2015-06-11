<?php

/**
* CSCI.373 - Advanced Web Technologies
* MySQLi Database Utility
* This package is for the Advanced Web Technologies class at 
* Framingham State University
*
* @author       Nathan Dentzau
* @date         03/12/2015
* @file         labs/Lab 8 - Midterm/database.php
*/

class database
{
    private $connection;

    public function __construct($database_config)
    {
        if (empty($database_config))
        {
            trigger_error("No database configuration details were provided", E_USER_ERROR);
        }

        $this->connection = mysqli_connect($database_config['dbhost'], $database_config['dbuser'], $database_config['dbpass'], $database_config['dbname']);

        if (!$this->connection)
        {
            trigger_error(mysqli_connect_error(), E_USER_ERROR);
        }
    }

    public function __destruct()
    {
        mysqli_close($this->connection);
    }

    public function sql_affectedrows()
    {
        return (int) mysqli_affected_rows();
    }

    public function sql_bind($statement, $params = array())
    {
        $type = "";
        $ref_params = array();

        // build a string of the types in $params
        foreach ($params as $key => $param)
        {
            switch (gettype($param))
            {
                
                case 'array':
                case 'object':
                case 'resource':
                    $type .= "b";
                break;

                case 'double':
                    $type .= "d";
                break;

                case 'boolean':
                case 'integer':
                    $type .= "i";
                break;

                case 'NULL':
                case 'string':
                    $type .= "s";
                break;

                default:
                    trigger_error("Unknown parameter type being passed in database::sql_bind()." . var_dump($param), E_USER_WARNING);
                break;
            }

            $ref_params[$key] =& $params[$key];
        }

        // add $statement and $type to the beginning of the $params array
        array_unshift($ref_params, $statement, $type);

        return call_user_func_array('mysqli_stmt_bind_param', $ref_params);
    }

    public function sql_changedb($database)
    {
        return (boolean) mysqli_select_db($this->connection, $database);
    }

    public function sql_changeuser($user, $password, $database)
    {
        return (boolean) mysqli_change_user($this->connection, $user, $password, $database);
    }

    public function sql_charset()
    {
        return (object) mysqli_get_charset($this->connection);
    }

    public function sql_clientinfo()
    {
        return (string) mysqli_get_client_info($this->connection);
    }

    public function sql_clientstats()
    {
        return (array) mysqli_get_client_stats();
    }

    public function sql_connectionstats()
    {
        return (array) mysqli_get_connection_stats($this->connection);
    }

    public function sql_debug($debug_code)
    {
        mysqli_debug($debug_code);
    }

    public function sql_debugdump()
    {
        return (boolean) mysqli_dump_debug_info($this->connection);
    }

    public function sql_escapestring($string)
    {
        return (string) mysqli_real_escape_string($this->connection, $string);
    }

    public function sql_execute($statement)
    {
        if (!mysqli_stmt_execute($statement))
        {
            trigger_error(mysqli_stmt_error($statement), E_USER_WARNING);
            return false;
        }

        return true;
    }

    public function sql_fieldcount()
    {
        return (int) mysqli_field_count($this->connection);
    }

    public function sql_fetch($statement)
    {
        $fields = $ref_fields = $results = array();

        $fields[] = $statement;

        $result = mysqli_stmt_result_metadata($statement);

        while ($field = mysqli_fetch_field($result))
        {
            $fields[] =& $ref_fields[$field->name];
        }

        call_user_func_array('mysqli_stmt_bind_result', $fields);

        while (mysqli_stmt_fetch($statement))
        {
            $x = array();

            foreach($ref_fields as $key => $val)
            {
                $x[$key] = $val;
            }

            $results[] = $x;
        }

        return (count($results) > 1) ? $results : $results[0];
    }

    public function sql_fetchrow($result, $type = MYSQLI_ASSOC)
    {
        return mysqli_fetch_array($result, $type);
    }

    public function sql_free($statement)
    {
        mysqli_stmt_free_result($statement);
    }

    public function sql_freeresult($result)
    {
        mysqli_free_result($result);
    }

    public function sql_hostinfo()
    {
        return (string) mysqli_get_host_info($this->connection);
    }

    public function sql_info()
    {
        return (string) mysqli_info($this->connection);
    }

    public function sql_insertid()
    {
        return mysqli_insert_id($this->connection);
    }

    public function sql_prepare($sql)
    {
        $result = mysqli_prepare($this->connection, $sql);

        if (!$result)
        {
            trigger_error(mysqli_error($this->connection), E_USER_WARNING);
        }

        return $result;
    }

    public function sql_protocolversion()
    {
        return (int) mysqli_get_proto_info($this->connection);
    }

    public function sql_query($sql)
    {
        $result = mysqli_query($this->connection, $sql);

        if (!$result)
        {
            trigger_error(mysqli_error($this->connection), E_USER_ERROR);
        }

        return $result;
    }

    public function sql_serverinfo()
    {
        return (string) mysqli_get_server_info($this->connection);
    }

    public function sql_setcharset($charset)
    {
        return (boolean) mysqli_set_charset($this->connection, $charset);
    }

    public function sql_status()
    {
        return "MySQLi Database Connection Status: " . mysqli_stat($this->connection);
    }

    public function sql_warningcount()
    {
        return (int) mysqli_warning_count($this->connection);
    }
}
