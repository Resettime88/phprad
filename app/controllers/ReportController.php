<?php 

/**
 * Report Page Controller
 * @category  Controller
 */
class ReportController extends BaseController{
	/**
     * Render All Records  in a  Data Table 
     * @return Html View
     */
	function index(){
		$this->view->render(null , null , "report_layout.php");
	}
}
