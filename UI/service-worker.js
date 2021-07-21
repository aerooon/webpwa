self.addEventListener("install", e => { 
    e.waitUntil(
      caches.open("offlineFiles").then(cache => {
         return cache.addAll([
             "./",  
             "./src/index.js",
             "./src/final.css",
             "./img/profile.jpg",
             "./img/rsz_1h4.jpg",
             "./img/rsz_1t1.jpg",
             "./img/rsz_h1.jpg",
             "./img/rsz_h2.jpg",
             "./img/rsz_h3.jpg",
             "./img/rsz_h5.jpg",
             "./img/rsz_h6.jpg",
             "./img/rsz_m1.jpg",
             "./img/rsz_m2.jpg",
             "./img/rsz_p1.jpg",
             "./img/rsz_t2.jpg",
             "./img/rsz_t3.jpg",
             "./192.png","./wall.png",
             ""
         ]);
      })
    );
});

self.addEventListener("fetch", e => {
   console.log("Intercepting request :"+ e.request.url);
   e.respondWith(
       caches.match(e.request).then(response => {
            return response || fetch(e.request);
       })
   );
});