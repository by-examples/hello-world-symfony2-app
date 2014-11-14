Feature: Web pages

  Scenario: Hello world page
    Given I am on "/cars/citroen/c4.html"

#     Then print current URL
#     Then print last response

     Then the response status code should be 200

#     Then I dump the contents
     Then I should see "This is The Cars/Citroen/C4 page!"
