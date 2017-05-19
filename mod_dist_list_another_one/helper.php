<?php

class ModDistList
{
    public static function getList($params)
    {
        $db = JFactory::getDbo();

        $query = $db->getQuery(true)
                    ->select('dist_id id, company_name')
                    ->from($db->quoteName('distributors'));

        $db->setQuery($query);

        $results = $db->loadObjectList();

        return $results;
    }

    public static function deleteDist($params)
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        
        $conditions = array(
            $db->quoteName('dist_id') . ' = ' . $db->quote($params['delete_dist'])
        );

        $query->delete($db->quoteName('distributors'))->where($conditions);
        $db->setQuery($query);
        $db->execute();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public static function editDist($params)
    {
        // $db = JFactory::getDbo();

        // $query = $db->getQuery(true)
        //             ->select('*')
        //             ->from($db->quoteName('distributors'))
        //             ->join('LEFT', $db->quoteName('country_list_by_dist') . ' ON ' . $db->quoteName('distributors.dist_id') . ' = ' . $db->quoteName('country_list_by_dist.dist_id'))
        //             ->where('distributors.dist_id = ' . $params['edit_dist']);

        // $db->setQuery($query);

        // $result = $db->loadObjectList();

        // print_r($result);

        // return current($result);
    }
}