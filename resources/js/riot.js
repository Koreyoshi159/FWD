var url = "https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/Koreyoshi159";
fetch(url, {
    method: "GET",
    withCredentials: true,
    headers: {
        "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36",
        "Accept-Language": "en-US,en;q=0.9,nl;q=0.8",
        "Accept-Charset": "application/x-www-form-urlencoded; charset=UTF-8",
        "Origin": "http://127.0.0.6",
        "X-Riot-Token": "RGAPI-8bae1d32-017b-4044-8b94-c073fd528d1b"
    }
}).then(function (resp) {
    return resp.json();
}).then(function (data) {
    console.log(data);
})["catch"](function (error) {
    console.log(error);
}); // // Replace ./data.json with your JSON feed
// fetch('./data.json')
//     .then((response) => {
//         return response.json()
//     })
//     .then((data) => {
//         // Work with JSON data here
//         console.log(data)
//     })
//     .catch((err) => {
//         // Do something for an error here
//     })