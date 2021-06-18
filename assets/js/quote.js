var words = ['|  ', '|  ', 'Web Developer', 'Mobile Developer', ''],
    part,
    countWord = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 90;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[countWord].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        countWord++;
        offset = 0;
        if (countWord >= len) {
          countWord = 0;
        }
      }
    }
    part = words[countWord].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.web-dev').text(part);
  },speed);
};

$(document).ready(function () {
  wordflick();
});