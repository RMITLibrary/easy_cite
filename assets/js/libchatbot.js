/*START OF GENESYS CHATBOT - PROD 19 SEP 2024 */
(function (g, e, n, es, ys) {
  g['_genesysJs'] = e;
  g[e] =
    g[e] ||
    function () {
      (g[e].q = g[e].q || []).push(arguments);
    };
  g[e].t = 1 * new Date();
  g[e].c = es;
  ys = document.createElement('script');
  ys.async = 1;
  ys.src = n;
  ys.charset = 'utf-8';
  document.head.appendChild(ys);
})(window, 'Genesys', 'https://apps.mypurecloud.com.au/genesys-bootstrap/genesys.min.js', {
  environment: 'prod-apse2',
  deploymentId: '4b536883-25d5-4149-8a63-b2d088976c24',
});

let button = document.createElement('button');
button.id = 'launcherButton';
button.title = 'Ask the Library';
button.setAttribute('aria-label', button.title);
button.innerHTML = `
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
<path d="M0 0h24v24H0z" fill="none" />
<path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" />
</svg>
<p id="buttonText">Ask the Library</p>`;

let buttonStyles = document.createElement('style');
buttonStyles.innerHTML = `
#launcherButton{
  cursor: pointer;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 5px -2px, rgba(0, 0, 0, 0.14) 0px 1px 4px 2px, rgba(0, 0, 0, 0.12) 0px 1px 4px 1px;
  box-sizing: content-box;
  position: fixed !important;
  bottom: 25px !important;
  width: 170px;
  height: 40px;
  right: 28px !important;
  border-radius: 50px;
  background-color: #e61e2a;
  z-index: 9999;
  border: 0px;
  padding-top: 8px;
}
#buttonText{
  display: inline;
  vertical-align: top;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  margin-left: 4px;
}`;

document.body.appendChild(button);
document.body.appendChild(buttonStyles);

button.addEventListener('click', async () => {
  Genesys('command', 'Messenger.open');
});
/*END OF GENESYS CHATBOT - PROD 19 SEP 2024 */
