<?php
class www {
  var $HTML;
  public function __construct($CFG)
    {
      $this->CFG = $CFG;
      $this->DB = $CFG->DB;
      $this->Head();
      $this->Navbar();
      $this->GetPage();
      $this->Foot();
    }
  /**
   * GetPage
   * -------------------------
   **/
  public function GetPage()
    {
      
    }
  /**
   * Navbar
   * -------------------------
   **/
  public function Navbar()
    {
      $HTML[] = '<td class="nb">';
      $HTML[] = '<h2>Scripts</h2>';
      $HTML[] = $this->GetFiles('apps',true);
      $HTML[] = '<h2>Logs</h2>';
      $HTML[] = $this->GetFiles('logs');
      $HTML[] = '<h2>Output</h2>';
      $HTML[] = $this->GetFiles('data');
      $HTML[] = '</td>';
      $this->HTML($HTML);
    }
  /**
   * HTML
   * -------------------------
   **/
  public function HTML($html)
    {
      $HTML = empty($this->HTML)?[]:$this->HTML;
      $this->HTML = array_merge($HTML,$html);
    }
  /**
   * CSS
   * -------------------------
   **/
  public static function CSS()
    {
      $S = [];     // CSS Styles
      $S['*']             = [
        'font-family'     => 'courier',
        'color'           => 'black',
        'border'          => 'none',
        'text-decoration' => 'none',
        'padding'         => '0px',
        'margin'          => '0px',
        'border-collapse' => 'collapse'
        ];
      foreach($S as $e=>$s){
        $C = [$e.'{'];
        foreach($s as $k=>$v)
          $C[] = "  ".$k.':'.$v.';';
        $C[] = '}';
        $_CSS[] = implode(LF,$C);
        }
      $_CSS = implode(LF,$_CSS);
      return '<style type="text/css">'.$_CSS.'</style>';
    }
  
  /**
   * Head
   * -------------------------
   **/
  public function Head()
    {
      $HTML[] = '<!DOCTYPE html>';
      $HTML[] = '<html>';
      $HTML[] = '<head>';
      $HTML[] = $this->CSS();
      $HTML[] = '</head>';
      $HTML[] = '<body>';
      $HTML[] = '<table>';
      $HTML[] = '<tr>';
      $this->HTML($HTML);
    }
  /**
   * Foot
   * -------------------------
   **/
  public function Foot()
    {
      $HTML[] = '</tr>';
      $HTML[] = '</table';
      $HTML[] = '</body>';
      $HTML[] = '</html>';
      $this->HTML($HTML);
    }
 
}
?>