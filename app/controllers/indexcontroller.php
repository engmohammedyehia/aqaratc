<?php
namespace PHPMVC\Controllers;
use PHPMVC\LIB\Helper;
use PHPMVC\Models\AreaModel;

class IndexController extends AbstractController
{
    use Helper;

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('index.default');

        $cities = [];

        $this->getAllCitiesOfCairo([40], $cities);

        $this->_data['cities'] = [];

        foreach ($cities as $city) {
            foreach ($city as $item) {
                $this->_data['cities'][] = $item;
            }
        }

        if(isset($_POST['submit'])) {
            $this->messenger->add($this->language->get('text_consult_success'));
            $this->redirect('/#success');
        }

        $this->_view();
    }

    public function getAllCitiesOfCairo($areas, &$cities)
    {
        foreach ($areas as $area) {
            $theCities = AreaModel::get('SELECT * FROM app_areas WHERE ParentArea = ' . $area);

            if(false !== $theCities) {
                $cities[] =  $theCities->getArrayCopy();
                $ids = [];
                foreach ($theCities as $theCity) {
                    $ids[] = $theCity->AreaId;
                }
                $this->getAllCitiesOfCairo($ids, $cities);
            }
        }
    }
}




