const posts = [{
  profile: "images/4-1.jpg",
  username: "fourto___one",
  uploadTime: "1h",
  mediaContent: "images/4-1.jpg"
},
{
  profile: "images/nhet.jpg",
  username: "wilnetszt",
  uploadTime: "4h",
  mediaContent: "images/nhet.jpg"
},
{
  profile: "images/sky.png",
  username: "skypiea",
  uploadTime: "3y",
  mediaContent: "images/sky.png"
},
{
  profile: "images/jujutsu-kaisen-theme-bh6.jpg",
  username: "noobara",
  uploadTime: "1d",
  mediaContent: "images/jujutsu-kaisen-theme-bh6.jpg"
}];

let postsHTML = "";

posts.forEach((post) => {
  postsHTML += `
    <div class="post-profile">
      <img src="${post.profile}" alt="1">
    <div>
      <p>${post.username} &#183; ${post.uploadTime}</p>
    </div>
    <div class="options">
      <i class="fa-solid fa-ellipsis"></i>
    </div>
    </div>
    <div class="post-media">
      <img src="${post.mediaContent}" alt="">
    </div>
    <div class="interaction">
      <i class="fa-regular fa-heart"></i>
      <i class="fa-regular fa-comment fa-flip-horizontal"></i>
      <i class="fa-solid fa-paper-plane"></i>
      <i class="fa-regular fa-bookmark"></i>
    </div>
  `
});

document.querySelector(".js-posts").innerHTML = postsHTML;