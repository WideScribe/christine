<?php
     class ContentEntryClass{

        public $slug = 'slug'; 
        public $title = 'Insert title here'; 
        public $excerpt = 'a short version'; 
        public $htmlContent = 'the html content'; 
        public $published = '01.01.1970'; 
        public $image = "somepicture.jpg";
        public $linkType = "pdf or link";
        public $linkUrl = "someUrl";

        public $featured = false;

        function __construct($slug, $title, $excerpt, $htmlContent, $published, $image, $linkType, $linkUrl = null, $featured = false){
                $this->slug = $slug;
                $this->title = $title;
                $this->excerpt = $excerpt;
                $this->htmlContent = $htmlContent;
                $this->published = $published;
                $this->image = $image;
                $this->linkType = $linkType;
                $this->linkUrl = $linkUrl;
                $this->featured = $featured;
        }
        public function search($searchString){
            if(strpos($this->title, $searchString)!== false){

                return true;
            }
            if(strpos($this->excerpt, $searchString)!== false){

                return true;
            }
            if(strpos($this->htmlContent, $searchString)!== false){

                return true;
            }
            return false;
        }
    }
?>