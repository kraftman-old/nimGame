<?php

  require __DIR__ . '/vendor/autoload.php';
  use phpunit\framework\TestCase;


  class UserSubscriptionTest extends TestCase
  {
    public function testTest()
    {

      $host = 'http://seleniumhub:4444/wd/hub';
      // If the requested test environment is not registered with the hub
      // or busy, allow enough time (600000, 600 sec, see below) for the Gridlastic auto scaling
      // functionality to launch grid nodes with the requested environment.
      $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
      $driver->manage()->window()->maximize(); // If Linux set window size, max 1920x1080
      $driver->get("http://tvcatchup:tvcatchup@website");
      $driver->manage()->timeouts()->implicitlyWait(10);


      print $driver->getTitle();

      $screenshotDir = "renders/testshot-chrome.png";
      $driver->takeScreenshot($screenshotDir);

      $driver->quit();
    }

  }
