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
     * Get player record info by player Id
     * @param integer $id
     * @return the result object
     */
    public function GetRecord($id)
    {

    }

    /**
     * Get players record list by page limitation
     * @param integer $limit_from
     * @param integer $limit_count
     * @return the result object
     */
    public function GetRecords($limit_from, $limit_count)
    {

    }


}

?>
