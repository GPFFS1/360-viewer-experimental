const CACHE_NAME = "360-viewer-cache-v1";
const urlsToCache = [
  "index.php",
  "style.css",
  "manifest.json",
  "service-worker.js",
  // Cache the Pannellum library from CDN if you wish
  "https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css",
  "https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js",
  // Cache your images (ensure the paths are correct)
  "/images/GS__0027.JPG",
  "/images/GS__0028.JPG",
  "/images/GS__0029.JPG",
  "/images/GS__0031.JPG",
  "/images/GS__0032.JPG",
  "/images/GS__0033.JPG",
  "/images/GS__0034.JPG",
  "/images/GS__0035.JPG",
  "/images/GS__0036.JPG",
  "/images/GS__0037.JPG",
  "/images/GS__0039.JPG",
  "/images/GS__0040.JPG",
  "/images/GS__0041.JPG",
  "/images/GS__0042.JPG",
  "/images/GS__0044.JPG",
  // Cache the icons used in manifest.json
  "/images/icon-192.png",
  "/images/icon-512.png",
];

self.addEventListener("install", (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      console.log("Opened cache");
      return cache.addAll(urlsToCache);
    })
  );
});

self.addEventListener("fetch", (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      // Return cached response if found, else fetch from network.
      return response || fetch(event.request);
    })
  );
});

self.addEventListener("activate", (event) => {
  // Clear out old caches.
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (cacheName !== CACHE_NAME) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});
