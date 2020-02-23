function fillVerses() {
    var bookSelect = document.getElementById("book");
    var selectedBook = bookSelect.options[bookSelect.selectedIndex].value;
    var chapterSelect = document.getElementById("chapter");
    var selectedChapter = chapterSelect.options[chapterSelect.selectedIndex].value;
    $('#verse').removeAttr("disabled");
    $.ajax({
        type: "POST",
        url: "getVerses.php",
        data: { 'book': selectedBook, 'chapter': selectedChapter },
        dataType: 'json',
        success: function(response){
            var len = response.length;
            for( var i = 0; i<len; i++){
                var verse = response[i];
                $("#verse").append("<option value='"+verse+"'>"+verse+"</option>");
            }
        }
    });
    $( "#verse" ).change(function() {
        $('#submit').removeAttr("disabled");
    });
}

function fillChapters() {
    var bookSelect = document.getElementById("book");
    var selectedBook = bookSelect.options[bookSelect.selectedIndex].value;
    $('#chapter').removeAttr("disabled");
    $.ajax({
        type: "POST",
        url: "getChapters.php",
        data: { 'book': selectedBook  },
        dataType: 'json',
        success: function(response){
            var len = response.length;
            for( var i = 0; i<len; i++){
                var chapter = response[i];
                $("#chapter").append("<option value='"+chapter+"'>"+chapter+"</option>");
            }
        }
    });
    $( "#chapter" ).change(function() {
        fillVerses();
    });
}