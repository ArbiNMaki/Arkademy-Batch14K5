function biodata(name, age) {

     var data = {
         name: name,
         age: age,
         address: "JL. PELTU SUJONO GG.ANGGREK NO.32 MALANG",
         hobbies: ["Game", "Watching ANIME"],
         is_married: false,
         list_school: [{
             "name": "STIKI MALANG",
             "year_in": "2015",
             "year_out": null,
             "major": "Teknik Informatika"
         }],
         skills: [{
             "skill_name": "html, Javascript, css, php, Figma",
             "level": "intermed, beginner"
         }],
         interest_in_coding: true
     }
     var data_json = JSON.stringify(data);
     return console.log(data_json);
 }

 var nama = 'ARBI DWI WIJAYA';
 var umur = 23;
 biodata(nama, umur);