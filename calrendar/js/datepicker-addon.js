$(function() {
// 毎年書き換える部分 ココカラ
  /* javascriptのDate関数に与える月は、0〜11であることに注意 */
  var minD = new Date(2011,0,1);   //カレンダーでピックアップできる最前の日
  var maxD = new Date(2013,2,31); //カレンダーでピックアップできる最後の日

  /*
   * 祝日・非営業日の定義
   * （土・日は自動計算）
   * "yyyyMMdd":{type:?, title:"休日の名前"} を要素とするオブジェクト
   * type は任意の意味を持たせることが可能
   * （この例では、type:0は国民の祝日、type:1は企業独自の非営業日としている）
   */
  var holidays = {
    "20110101":{type:0, title:"元日"},
    "20110110":{type:0, title:"成人の日"},
    "20110211":{type:0, title:"建国記念の日"},
    "20110321":{type:0, title:"春分の日"},
    "20110429":{type:0, title:"昭和の日"},
    "20110503":{type:0, title:"憲法記念日"},
    "20110504":{type:0, title:"みどりの日"},
    "20110505":{type:0, title:"こどもの日"},
    "20110718":{type:0, title:"海の日"},
    "20110919":{type:0, title:"敬老の日"},
    "20110923":{type:0, title:"秋分の日"},
    "20111010":{type:0, title:"体育の日"},
    "20111031":{type:1, title:"創立記念日"},
    "20111103":{type:0, title:"文化の日"},
    "20111123":{type:0, title:"勤労感謝の日"},
    "20111223":{type:0, title:"天皇誕生日"},
    "20120101":{type:0, title:"元日"},
    "20120102":{type:0, title:"振替休日"},
    "20120109":{type:0, title:"成人の日"},
    "20120211":{type:0, title:"建国記念の日"},
    "20120320":{type:0, title:"春分の日"},
    "20120429":{type:0, title:"昭和の日"},
    "20120430":{type:0, title:"振替休日"},
    "20120503":{type:0, title:"憲法記念日"},
    "20120504":{type:0, title:"みどりの日"},
    "20120505":{type:0, title:"こどもの日"},
    "20120716":{type:0, title:"海の日"},
    "20120917":{type:0, title:"敬老の日"},
    "20120922":{type:0, title:"秋分の日"},
    "20121008":{type:0, title:"体育の日"},
    "20121031":{type:1, title:"創立記念日"},
    "20121103":{type:0, title:"文化の日"},
    "20121123":{type:0, title:"勤労感謝の日"},
    "20121223":{type:0, title:"天皇誕生日"},
    "20121224":{type:0, title:"振替休日"}
  };
// 毎年書き換える部分 ココマデ

  // この例では、"datepicker"というclassを持つテキストフィールドにdatepickerを挿入する
  $(".datepicker").datepicker({
    // 選択後にテキストフィールドに入力される日付のフォーマット。なぜかyyが4桁の年を意味する。。。
    dateFormat: "yy/mm/dd",
    minDate: minD,
    maxDate: maxD,
    beforeShowDay: function(day) {
      var result;
      var holiday = holidays[$.format.date(day, "yyyyMMdd")]
      // 祝日・非営業日定義に存在するか？
      if (holiday) {
        result =  [false, "date-holiday"+holiday.type, holiday.title];
      } else {
        switch (day.getDay()) {
          case 0: // 日曜日か？
            result = [false, "date-sunday"];
            break;
          case 6: // 土曜日か？
            result = [false, "date-saturday"];
            break;
          default:
            result = [true, ""];
            break;
        }
      }
      return result;
    }
  });
});