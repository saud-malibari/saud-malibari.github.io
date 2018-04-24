var books=[];
function returnBooks(){
    var search = document.getElementById('search').value
    document.getElementById('list-books').innerHTML=""
    console.log(search)

    $.ajax({
        url: "https://www.googleapis.com/books/v1/volumes?q="+search,
        datatype: "json",

        success: function(data){
            books=[]
            for( i=0; i < data.items.length; i++){
                
                books.push({
                    tital:'' + data.items[i].volumeInfo.title + '', 
                    author: '' + data.items[i].volumeInfo.authors + '', 
                    publishedDate: data.items[i].volumeInfo.publishedDate,
                    description:  '' + data.items[i].volumeInfo.description + '', 
                    pageCount:  data.items[i].volumeInfo.pageCount, 
                    sRate: data.items[i].volumeInfo.averageRating, 
                    img:'' + data.items[i].volumeInfo.imageLinks.thumbnail + ''
                })
            }upDateDOM()
        },

        type: 'GET'
    });
}

document.getElementById('button').addEventListener('click', returnBooks, false)


var btd = books.children;
                function printBook(booksO){
                  

                    

                    var li = document.createElement("li");   

                    var image = document.createElement("img");
                    image.src=booksO.img;                         
                    var title = document.createElement("p");
                    var text = document.createTextNode("Title Of The Book: " + booksO.tital);
                    var author = document.createElement("p");
                    var authortext = document.createTextNode("author: " + booksO.author);
                    var date = document.createElement("p");
                    var dtext = document.createTextNode("published Date: " + booksO.publishedDate);
                    var description = document.createElement("p");
                    var des = document.createTextNode("The Book description: " + booksO.description);
                    var pageCount = document.createElement("p");
                    var count = document.createTextNode("Book page Count: " + booksO.pageCount);
                    var sRate = document.createElement("p");
                    var sr = document.createTextNode("Rate In Stars: " + booksO.sRate);
                    

                    
                    title.appendChild(text);
                    author.appendChild(authortext);
                    date.appendChild(dtext);
                    description.appendChild(des);
                    pageCount.appendChild(count);
                    sRate.appendChild(sr);

                    li.appendChild(image);
                    li.appendChild(title);
                    li.appendChild(author);
                    li.appendChild(date);
                    li.appendChild(description);
                    li.appendChild(pageCount);
                    li.appendChild(sRate);

                    return li;
                        
                    
                   
                    };

                        function sortByPageCount(){
                        books.sort(function(a, b){return b.pageCount - a.pageCount})
                        }

                        function sortBySRate(){
                        books.sort(function(a, b){return b.sRate - a.sRate})
                        }

                        function sortByDate(){
                        books.sort(function(a, b){return a.publishedDate - b.publishedDate})
                        }

                        function upDateDOM(){
                        var bl= document.getElementById("list-books")
                        bl.innerHTML = '';
                        for (item of books) {
                            bl.appendChild(printBook(item))
                        }
                    }

                    var select = document.getElementById("sort-select")
                    select.onchange = function () {
                        if (select.value === 'page') {
                            sortByPageCount()
                            upDateDOM()
                        }
                        else if (select.value === 'stars') {
                            sortBySRate()
                            upDateDOM()
                        }
                        else if (select.value === 'date') {
                            sortByDate()
                            upDateDOM()
                        }

                    }
                   
                
                