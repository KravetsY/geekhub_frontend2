startdate = new Date();
clockStart = startdate.getTime();
function initStopwatch() {
  var thisTime = new Date(); 
  return (thisTime.getTime() - clockStart)/1000; 
}
function getSecs() {
  var tSecs = Math.round(initStopwatch());
  var iSecs = tSecs % 60;
  var ihour = sMins % 60;
  var iMins = Math.round((tSecs-30)/60);
  var ihour = Math.round((iMins-30)/60);
  var sSecs ="" + ((iSecs > 9) ? iSecs : "0" + iSecs);
  var sMins ="" + ((iMins > 9) ? iMins : "0" + iMins);
  var shour ="" + ((ihour > 9) ? ihour : "0" + ihour);
  document.getElementById("timer-counter").innerHTML = shour+":"+sMins+":"+sSecs;
  setTimeout('getSecs()', 1000); 
}


