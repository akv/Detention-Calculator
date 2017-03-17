<?php

class User extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("user_model");
    }

    //default method
    public function index() {
        $data = array();
        $data['title'] = "Home";
        $this->load->viewFile("home", $data);
    }

    public function calculator() {
        $postData = $_POST;
        foreach ($_POST['offense'] as $offense) {
            $offensetype[$offense] = $this->detentionMark($offense);
        }

        $data = array(
            'user_name' => $_POST['name'],
            'offenses' => $offensetype,
            'G_B_time' => $_POST['gtbt'],
            'calculation_mode' => $_POST['calculationmode']
        );
        $insertData = $this->user_model->insertData($data);
        //calculate the detention hour
        return $this->detensionCalculator($data);
        exit;
    }

    public function detensionCalculator($data) {
        $detention_hour = 0;

        foreach ($data['offenses'] as $offenxe) {
            $detention_hour = $detention_hour + $offenxe;
        }
        //  echo  $detention_hour; exit; 
        switch ($data['G_B_time']):
            case 0:
                $detention_hour = $detention_hour - (10 / 100) * $detention_hour;
                break;
            case 1:
                $detention_hour = $detention_hour + (10 / 100) * $detention_hour;
                break;
        endswitch;


        try {
            echo $this->inverse($detention_hour) . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }

        exit;
    }

    public function detentionMark($param) {
        switch ($param):
            case "H_N_done":
                return 1;
                break;
            case "stealing":
                return 2;
                break;
            case "flighting":
                return (float) 0.5;
                break;
            case "untideyness":
                return 1;
                break;
            case "lying":
                return (float) 1.5;
                break;
            case "S_P_damage":
                return 1;
                break;
            default:
                return 0;
        endswitch;
    }

    public function inverse($x) {
        if ($x > 8) {
            throw new Exception('The detention is more than 8 hrs and their parents needs to be contracted.');
        } else {
            echo "Detention period is: " . $x . "hours";
        }
    }

}
