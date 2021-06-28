public function addNewPdfthumbnail()
    {
        if($this->input->post('submit'))
        {
            if ($_FILES['pdf_file']['size'] !== 0) 
            {
                $this->load->library('imagick');
            
                $fileExt = $_FILES['pdf_file']['type'];
                $fileName = $_FILES['pdf_file']['name'];
                $file = $_FILES['pdf_file']['tmp_name'];
                
                $result = generateThumbnailFromPDF($file);
            }
                
        }
    }