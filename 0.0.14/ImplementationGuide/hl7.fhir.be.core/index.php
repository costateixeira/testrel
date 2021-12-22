<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://costateixeira.github.io/hl7.fhir.be.core/0.0.14/ImplementationGuide-hl7.fhir.be.core.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://costateixeira.github.io/hl7.fhir.be.core/0.0.14/ImplementationGuide-hl7.fhir.be.core.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://costateixeira.github.io/hl7.fhir.be.core/0.0.14/ImplementationGuide-hl7.fhir.be.core.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://costateixeira.github.io/hl7.fhir.be.core/0.0.14/ImplementationGuide-hl7.fhir.be.core.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://costateixeira.github.io/hl7.fhir.be.core/0.0.14/ImplementationGuide-hl7.fhir.be.core.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://costateixeira.github.io/hl7.fhir.be.core/0.0.14/ImplementationGuide-hl7.fhir.be.core.html');
else 
  Redirect('https://costateixeira.github.io/hl7.fhir.be.core/0.0.14/ImplementationGuide-hl7.fhir.be.core.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
