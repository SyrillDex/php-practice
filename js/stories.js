const storyInfo = [{
  image: "images/4-1.jpg",
  name: "4:1"
},
{
  image: "images/sy.jpg",
  name: "sy___dex"
},
{
  image: "images/nhet.jpg",
  name: "wilnetszt"
},
{
  image: "images/jujutsu-kaisen-3840x2743-9278.jpg",
  name: "Go__jo"
},
{
  image: "images/jujutsu-kaisen-theme-bh6.jpg",
  name: "noobara"
},
{
  image: "images/jujutsu-kaisen-theme-bs3.jpg",
  name: "jo_go"
},
{
  image: "images/jujutsu-kaisen-theme-ki11.jpg",
  name: "infinityyy"
},
{
  image: "images/op.png",
  name: "blimblum"
},
{
  image: "images/sky.png",
  name: "skypiea21"
},
{
  image: "images/Untitled.png",
  name: "Luffy_Daily"
},
{
  image: "images/wallpaperflare.com_wallpaper (3).jpg",
  name: "naruto"
},
{
  image: "images/Untitled.png",
  name: "Luffy_Daily"
},
{
  image: "images/wallpaperflare.com_wallpaper (3).jpg",
  name: "naruto"
},
{
  image: "images/Untitled.png",
  name: "Luffy_Daily"
},
{
  image: "images/wallpaperflare.com_wallpaper (3).jpg",
  name: "naruto"
}];

let storiesHTML = '';

storyInfo.forEach((story) => {
  storiesHTML += `
  <div class="story">
        <img src="${story.image}" alt="Story">
        <p>${story.name}</p>
      </div> `
});

document.querySelector('.js-stories').innerHTML = storiesHTML;