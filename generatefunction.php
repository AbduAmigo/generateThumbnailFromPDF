function generateThumbnailFromPDF($file)
{
    //echo '<pre>';print_r($filePath);die();
    $output_format = "jpeg";
    $preview_page = "1";
    $resolution = "300";
    $output_file = "imagick_preview.jpg";

    echo "Fetching preview...\n";
    $img_data = new Imagick();
    $img_data->setResolution( $resolution, $resolution );
    $img_data->readImage( $file . "[" . ($preview_page - 1) . "]" );
    $img_data->setImageFormat( $output_format );

    file_put_contents( $output_file, $img_data, FILE_USE_INCLUDE_PATH );
    

    return $result;
}