const { driver, url, username, password } = require("./config");
const {By, Key} = require("selenium-webdriver");

const { test001 } = require("./01.test");
const { assert } = require("chai");

before(async function () {
});

after(async function () {
    await driver.close();
});

describe("Test Suite", () => {
    describe("001 - Woohoo", test001);
});
