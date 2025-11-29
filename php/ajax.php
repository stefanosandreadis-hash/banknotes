<?php echo (isset($_GET['timestamp'])) ?
  'timestamp value <strong>' . (int) $_GET['timestamp'] . '</strong>' :
  'no timestampe value received';

if(isset($_GET['sleep'])) {
    sleep(3);
}