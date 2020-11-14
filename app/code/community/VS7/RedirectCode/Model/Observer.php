<?php

class VS7_RedirectCode_Model_Observer
{
    public function setRedirectCode($event)
    {
        $response = $event->getResponse();
        if (
            $response
            && $response->getHttpResponseCode() == 302
        ) {
            $response->setHttpResponseCode(301);
        }
    }
}