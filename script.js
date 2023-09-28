function run() {
    var url = document.getElementById('url').value;
    var edit = url.split("cloudfront.net")[1];
    var final = edit.split("/dash/")[0];
    var link = "<a  class='link btn btn-secondary' href='https://d26g5bnklkwsh4.cloudfront.net" + final + "/hls/720/main.m3u8'>720p</a>" + "<br>" + "<a class='link btn btn-secondary' href='https://d26g5bnklkwsh4.cloudfront.net" + final + "/hls/480/main.m3u8'>480p</a>" + "<br>" + "<a class='link btn btn-secondary' href='https://d26g5bnklkwsh4.cloudfront.net" + final + "/hls/360/main.m3u8'>360p</a>" + "<br>" + "<a class='link btn btn-secondary' href='https://d26g5bnklkwsh4.cloudfront.net" + final + "/hls/240/main.m3u8'>240p</a>" + "<br>"
    // document.write(link);
    document.getElementById('link').innerHTML = link;
}
