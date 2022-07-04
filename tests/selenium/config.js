const chromedriver = require("chromedriver");
const chrome = require("selenium-webdriver/chrome");
chrome.setDefaultService(new chrome.ServiceBuilder(chromedriver.path).build());

const { Builder } = require("selenium-webdriver");

let driver = new Builder()
  .forBrowser("chrome")
  .setChromeOptions(
    new chrome.Options()
      .headless()
      .setAcceptInsecureCerts(true)
      .windowSize({ width: 1024, height: 768 })
  )
  .build();

module.exports = {
  driver,
  url: "https://localhost:4443",
};
