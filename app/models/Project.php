<?php

namespace App\models;

class Project
{
  public $projectID;
  public $customerID;
  public $projectName;
  public $percentage;
  public $paymentStatus;
  public $isOngoing;
  public $createdAt;

  public $statusUpdates = array();
}
