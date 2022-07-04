const { driver, url } = require("./config");
const {By, until, Key} = require("selenium-webdriver");
const assert = require("assert");

/**
 *
 */
function test001() {
    it ("Aeeee!!!", async function() {
        await driver.get(`${url}`);
        const body = await driver.findElement(By.css("body")).getText();
        assert.equal(body, 'array(2) { [0]=> array(4) { ["id"]=> string(1) "1" [0]=> string(1) "1" ["nome"]=> string(9) "Pessoa 01" [1]=> string(9) "Pessoa 01" } [1]=> array(4) { ["id"]=> string(1) "2" [0]=> string(1) "2" ["nome"]=> string(9) "Pessoa 02" [1]=> string(9) "Pessoa 02" } }');
    });
};

module.exports = {
    test001
}
