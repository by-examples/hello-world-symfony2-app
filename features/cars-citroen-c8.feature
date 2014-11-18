Feature: Web pages

  Scenario: Cars/Citroen/C8 page
    Given I am on "/cars/citroen/c8.html"
     Then the response status code should be 200
     Then I should see "This is The Cars/Citroen/C8 page!"
