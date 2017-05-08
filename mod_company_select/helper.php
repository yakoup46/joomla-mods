<?php

class ModCompanySelect {

    public static function getCountries() {
        $db = JFactory::getDbo();

        $query = $db->getQuery(true)
                    ->select('*')
                    ->from($db->quoteName('countries'))
                    ->join('LEFT', $db->quoteName('country_list_by_dist') . ' ON ' . $db->quoteName('countries.countries_id') . ' = ' . $db->quoteName('country_list_by_dist.CID'))
                    ->join('INNER', $db->quoteName('distributors') . ' ON ' . $db->quoteName('distributors.dist_id') . ' = ' . $db->quoteName('country_list_by_dist.dist_id'))
                    ->where('status = ' . $db->Quote('active'))
                    ->where('distributors.active = ' . $db->Quote('Y'))
                    ->order('countries_name, sort_order');

        $db->setQuery($query);

        $results = $db->loadObjectList();

        $countries = [];

        foreach ($results as $country) {
            if (isset($countries[$country->countries_id])) {
                $countries[$country->countries_id]['distributors'][$country->dist_id] = $country;
            } else {
                $countries[$country->countries_id]  = [
                    'country' => $country->countries_name,
                    'distributors' => [$country->dist_id => $country]
                ];
            }
        }

        return $countries;
    }
}