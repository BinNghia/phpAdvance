<?php
namespace MVC\Controllers;
use MVC\Core\Controller;
use MVC\Models\CarRepository;
use MVC\Models\CarModel;
class CarsController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/CarRepository.php');

        $cars = new CarRepository();

        $data['cars'] = $cars->getAll();
        // echo "<pre>";
        // var_dump($data['tasks']);
        $this->set($data);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["name"]))
        {
            require(ROOT . 'Models/CarRepository.php');
            $model = new CarModel();
            $model->setName($_POST["name"]);
            $model->setColour($_POST["colour"]);
            $car= new CarRepository();

            if ($car->add($model))
            {
                header("Location: " . WEBROOT . "cars/index");
            }
        }
        $this->render("create");

        
    }

    function edit($id)
    {
        require(ROOT . 'Models/CarRepository.php');
        $carModel = new CarModel();
        $carRepository = new CarRepository();

        $data["car"] = $carRepository->get($id);
        // var_dump($data);
        // die();
        if (isset($_POST["name"]))
        {
            // var_dump($_POST);
            $carModel->setId($_POST["id"]);
            $carModel->setName($_POST["name"]);
            $carModel->setColour($_POST["colour"]);
            if ($carRepository->add($carModel))
            {
                // die("fnskf");
                header("Location: " . WEBROOT . "cars/index");
            }
        }
        $this->set($data);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/CarRepository.php');

        $car = new CarRepository();
        if ($car->delete($id))
        {
            header("Location: " . WEBROOT . "cars/index");
        }
    }
}
?>