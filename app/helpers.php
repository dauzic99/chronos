<?php


if (!function_exists('summerUpload')) {
    function summerUpload($content, $folder)
    {
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            if (!File::exists(public_path() . $folder)) {
                File::makeDirectory(public_path() . $folder);
            }
            $image_name = $folder . '/'  . time() . $k . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        return $dom->saveHTML();
    }
}
