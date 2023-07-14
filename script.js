function tweet_publ (){
    let ongl_tweet=document.querySelector('.tweet_publ');
    let tw_but=document.querySelector('.tweet_button');
    console.log(ongl_tweet);
    console.log(tw_but);
    
    tw_but.addEventListener('click', ()=>{
        ongl_tweet.classList.toggle('tweet_off');
    })
}
tweet_publ()

// tweetCtnTabl=''
// console.log(tweetCtnTabl);
// let tl=tweetTabl.length;
// console.log(tl);
// let x=0

// while (x<tl){
//     tweetCtnTabl=tweetTabl[x]['tweet_ctn']
//     if(tweetCtnTabl.includes("#")){
//         tweetCtnTabl= tweetCtnTabl.replace(/(^|\s)(#[a-z\d-]+)/ig, "$1<a class='hash_tag' href=''>$2</a>");
//         console.log(tweetCtnTabl);
//     }
//     else{
//         tweetCtnTabl=''
//     }
//     tweetCtnTabl = '<?php echo $tweetCtnTablPhp; ?>';
//     x=x+1
// }

// pour chaque tweet