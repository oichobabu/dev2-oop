
<?php
  class System{
    // properties
    private $age;
    private $distance;
    private $fare;

    // methods
    public function setAge($new_age){
      $this->age = $new_age;
    }
    public function setDistance($new_distance){
      $this->distance = $new_distance;
    }

    public function getAge(){
      return $this->age;
    }
    public function getDistance(){
      return $this->distance;
    }

    public function setFare(){
      // Better code is below

      // if($this->distance <= 4){
      //   $this->fare = 8;
      // }elseif($this->distance > 4){
      //   $this->fare = $this->distance + 4;
      // }

      // if($this->age >= 60){
      //   $this->fare *= 0.8;
      // }

      // My code is below
      if($this->age<60){
        if($this->distance>4){
          return $this->fare = ($this->distance%4)+8;
        }else{
          return $this->fare = 8;
        }
      }else{
        if($this->distance>4){
          return $this->fare = (($this->distance%4)+8)*0.8;
        }else{
          return $this->fare = 8;
        }

      }
    }
    public function getFare(){
      return $this->fare;
    }

  }

?>