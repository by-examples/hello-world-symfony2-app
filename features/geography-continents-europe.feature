Feature: Web pages

  Scenario: Geography/Continents/Europe page
    Given I am on "geography/continents/europe.html"
     Then the response status code should be 200
     Then I should see "This is The Geography/Continents/Europe page!"
