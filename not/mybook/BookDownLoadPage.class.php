<?php
if(!class_exists(book)) include dirname(__FILE__) . '/book.class.php';
class BookDownLoadPage {
    private $bookid;
    private $book;
    public function __construct($bookid) {
        $this->bookid = mysql_real_escape_string($bookid);
        $this->book = new book($this->bookid);
    }
    
    public function getBookDownloadpage(){
        $bookinfo = $this->book->getBookPrice();
        return $bookinfo['PdfDownloadpage'];
    }
    
}

?>
