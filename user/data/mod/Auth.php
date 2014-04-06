<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

interface auth_interface {

     public function getIsAdmin();

     public function BandAccess();

     public function UserAccess();

     public function CacheAccess();

     public function PanelAccess();

     public function getLevel();

     public function ArticleAccess();
}

class Auth extends Conn_mysql implements auth_interface {

     private $uid = NULL;
     private $isAdmin = NULL;
     //Admin
     private $bandAccess = NULL;
     private $panelAccess = NULL;
     private $userAccess = NULL;
     private $cacheAccess = NULL;
     //User
     private $articleAccess = NULL;
     private $ucenterAccess = NULL;
     private $EditArticle = NULL;
     private $Table = NULL;
     private $lev = NULL;

     public function __construct($uid) {
          parent::getInstance();
          $this->uid = $uid;
          $this->isAdmin = self::getIsAdmin();
          $this->Table = $this->isAdmin == true ? "_admin_" : "_user_";
          self::setLevel();
     }

     public function getIsAdmin() {
          if ($this->isAdmin !== NULL) {
               return $this->isAdmin;
          } else {
               @$isAdminrs = mysql_fetch_array(self::query(self::getSQL('isAdmin')));
               if ($isAdminrs['count'] == 1) {
                    $this->isAdmin = true;
               } else {
                    $this->isAdmin = false;
               }
               unset($isAdminrs);
               return $this->isAdmin;
          }
     }

     public function getLevel() {
          if ($this->lev != NULL)
               return $this->lev;
          else
               return self::setLevel();
     }

     private function setLevel() {
          $Acc = @mysql_fetch_array(self::query(self::getSQL('level')), MYSQL_ASSOC);
          $this->lev = $Acc['level'];
          unset($Acc);
          return $this->lev;
     }

     private function getSQL($key) {
          switch ($key) {
               case 'bandAccess':
                    return "SELECT band_access AS access FROM common_admin_access WHERE lev=$this->lev;";
               case 'userAccess':
                    return "SELECT user_access AS access FROM common_admin_access WHERE lev=$this->lev;";
               case 'panelAccess':
                    return "SELECT panel_access AS access FROM common_admin_access WHERE lev=$this->lev;";
               case 'cacheAccess':
                    return "SELECT cache_access AS access FROM common_admin_access WHERE lev=$this->lev;";
               case 'level':
                    return "SELECT level FROM common" . $this->Table . "group WHERE uid=$this->uid;";
               case 'isAdmin':
                    return "SELECT COUNT(*) as count FROM common_admin_group WHERE uid=$this->uid;";
               case 'articleAccess':
                    return "SELECT article_access as access FROM common_user_access WHERE lev=$this->lev;";
               case 'ucenterAccess':
                    return "SELECT ucenter_access as access FROM common_user_access WHERE lev=$this->lev;";
               case 'editArticle':
                    return "SELECT edit_article as access FROM common_user_authority WHERE lev=$this->lev;";
          }
     }

     /* Admin-----------------------------------------> */

     public function BandAccess() {
          if (!self::getIsAdmin()) {
               return false;
          } else {
               if ($this->bandAccess === NULL) {
                    $Acc = @mysql_fetch_array(self::query(self::getSQL('bandAccess')), MYSQL_ASSOC);
                    if ($Acc['access'] == 1) {
                         $this->bandAccess = true;
                    } else {
                         $this->bandAccess = false;
                    }
                    unset($Acc);
               }
               return $this->bandAccess;
          }
     }

     public function UserAccess() {
          if (!self::getIsAdmin()) {
               return false;
          } else {
               if ($this->userAccess === NULL) {
                    $Acc = @mysql_fetch_array(self::query(self::getSQL('userAccess')), MYSQL_ASSOC);
                    if ($Acc['access'] == 1) {
                         $this->userAccess = true;
                    } else {
                         $this->userAccess = false;
                    }
                    unset($Acc);
               }
               return $this->userAccess;
          }
     }

     public function CacheAccess() {
          if (!self::getIsAdmin()) {
               return false;
          } else {
               if ($this->cacheAccess === NULL) {
                    $Acc = mysql_fetch_array(self::query(self::getSQL('cacheAccess')), MYSQL_ASSOC);
                    if ($Acc['access'] == 1) {
                         $this->cacheAccess = true;
                    } else {
                         $this->cacheAccess = false;
                    }
                    unset($Acc);
               }
               return $this->cacheAccess;
          }
     }

     public function PanelAccess() {
          if (!self::getIsAdmin()) {
               return false;
          } else {
               if ($this->panelAccess === NULL) {
                    $Acc = @mysql_fetch_array(self::query(self::getSQL('panelAccess')), MYSQL_ASSOC);
                    if ($Acc['access'] == 1) {
                         $this->panelAccess = true;
                    } else {
                         $this->panelAccess = false;
                    }
                    unset($Acc);
               }
               return $this->panelAccess;
          }
     }

     /* <----------------------------------------- Admin */

     /* User----------------------------------------- */

     public function ArticleAccess() {
          if (self::getIsAdmin()) {
               return true;
          } else {
               if ($this->articleAccess === NULL) {
                    $Acc = mysql_fetch_array(self::query(self::getSQL('articleAccess')), MYSQL_ASSOC);
                    if ($Acc['access'] == 1) {
                         $this->articleAccess = true;
                    } else {
                         $this->articleAccess = false;
                    }
                    unset($Acc);
               }
               return $this->articleAccess;
          }
     }

     public function UcenterAccess() {
          if (self::getIsAdmin()) {
               return true;
          } else {
               if ($this->ucenterAccess === NULL) {
                    $Acc = mysql_fetch_array(self::query(self::getSQL('ucenterAccess')), MYSQL_ASSOC);
                    if ($Acc['access'] == 1) {
                         $this->ucenterAccess = true;
                    } else {
                         $this->ucenterAccess = false;
                    }
                    unset($Acc);
               }
               return $this->ucenterAccess;
          }
     }

     public function EditArticle() {
          if (self::getIsAdmin()) {
               return true;
          } else {
               if ($this->editArticle === NULL) {
                    $Acc = mysql_fetch_array(self::query(self::getSQL('editArticle')), MYSQL_ASSOC);
                    if ($Acc['access'] == 1) {
                         $this->editArticle = true;
                    } else {
                         $this->editArticle = false;
                    }
                    unset($Acc);
               }
               return $this->editArticle;
          }
     }

     /* User----------------------------------------- */
}
/*
$a = new Auth(3);

echo "level ", $a->getLevel(), " ,";

var_dump($a->getIsAdmin());
var_dump($a->CacheAccess());
var_dump($a->UserAccess());
var_dump($a->BandAccess());
var_dump($a->PanelAccess());
var_dump($a->ArticleAccess());
var_dump($a->UcenterAccess());
var_dump($a->EditArticle());*/