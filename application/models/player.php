<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Player_Model extends Model
{
    public function __construct($id = NULL)
    {
    // load database library into $this->db (can be omitted if not required)
        parent::__construct($id);
    }

    /**
     * Get player profile info by player name
     * @param integer $name
     * @return the result object
     */
    public function GetProfileByName($name)
    {
        $this->db->where('name', strtolower($name));
        $profile = $this->db->get(Kohana::config("database.table_profile"));
        if (count($profile) == 0)
            return false;

        $pInfo =  $profile[0];
        return $pInfo;
    }

    /**
     * Get player profile info by unique id
     * @param integer $id
     * @return the result object
     */
    public function GetProfileById($id)
    {
        $this->db->where('uid', $id);
        $profile = $this->db->get(Kohana::config("database.table_profile"));
        if (count($profile) == 0)
            return false;

        $pInfo =  $profile[0];
        return $pInfo;
    }

     /**
     * Get player stats by player id
     * @param integer $playerId
     * @return the result object
     */
    public function GetStats($playerId)
    {
        $record = new Record_Model();
        $recordInfo = $record->getRecord($server_id);

        $this->db->where('uid', $id);
        $profile = $this->db->get(Kohana::config("database.table_profile"));
        if (count($profile) == 0)
            return false;

        $pInfo =  $profile[0];
        return $pInfo;
    }


}

?>
