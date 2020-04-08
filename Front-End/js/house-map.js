$(function () {

  //function randomString() generates ID number for cards and columns
  function randomString() {
    var chars = '0123456789abcdefghiklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXTZ';
    var str = '';
    for (var i = 0; i < 10; i++) {
      str += chars[Math.floor(Math.random() * chars.length)];
    }
    return str;
  }

  // Column class
  function Column(name) {
    var self = this;
    this.id = randomString();
    this.name = name;
    this.$element = createColumn();

    function createColumn() {
      // components of column
      var $column = $('<div>').addClass('column');
      var $columnTitle = $('<h4>').addClass('column-title').text(self.name);
      var $columnDelete = $('<button>').addClass('delete btn btn-danger');
      var $columnCardList = $('<ul>').addClass('column-card-list');
      // var $columnAddCard = $('<button>').addClass('btn add-card').text('Add a card');

      //events for column
      $columnDelete.click(function () {
        self.removeColumn();
      });
      // $columnAddCard.click(function () {
      //   self.addCard(new Card(prompt('Enter the name of the card')));
      // });

      // construction of column components
      $column.append($columnTitle)
        .append($columnCardList)
        .append($columnDelete);

        // .append($columnAddCard)

      // return of created column
      return $column;
    }
  }

  Column.prototype = {
    addCard: function (card) {
      this.$element.children('ul').append(card.$element);
    },
    removeColumn: function () {
      this.$element.remove();
    }
  };

  function Card(description, state) {
    var self = this;

    this.id = randomString();
    this.description = description;
    this.state = state;
    this.$element = createCard();

    console.log(self.description);

    function createCard() {

      // creating cards
      var $card = $('<li>').addClass('card').addClass(self.state);
      var $cardDescription = $('<div>').addClass('card-description').text(self.description);

      // event for card - removing it
      // $cardDelete.click(function () {
      //   self.removeCard();
      // });

      //combaining the blocks
      $card.append($cardDescription);

      // combining the blocks (new version)
      // $card.append($cardDescription);

      // returning the card
      return $card;

    }
  }

  Card.prototype = {
    removeCard: function () {
      this.$element.remove();
    }
  };

  var board = {
    name: 'Kanban Board',
    addColumn: function (column) {
      this.$element.append(column.$element);
      initSortable();
    },
    $element: $('#board .column-container')
  };

  function initSortable() {
    $('.column-card-list').sortable({
      connectWith: '.column-card-list',
      placeholder: 'card-placeholder'
    }).disableSelection();
  }


  $('.create-column')
    .click(function () {
      var name = prompt('Enter the room name:');
      if (name !== ""){
        var column = new Column(name);
        board.addColumn(column);
      }
      else{
        alert("Sorry, your room name cannot be empty");
      }
    });

  // CREATING COLUMNS


  var kitchenColumn = new Column('Kitchen');
  var bedroomColumn = new Column('Bedroom');
  var bedroom2Column = new Column('Bedroom 2');
  var bedroom3Column = new Column('Bedroom 3');

  // ADDING COLUMNS TO THE BOARD
  board.addColumn(kitchenColumn);
  board.addColumn(bedroomColumn);
  board.addColumn(bedroom2Column);
  board.addColumn(bedroom3Column);

  // CREATING CARDS
  var card1 = new Card('Samsung TV','red-state');
  var card2 = new Card('Fridge', 'red-state');
  var card3 = new Card('Lights', 'green-state');
  var card4 = new Card('TV 2', 'green-state');

  // ADDING CARDS TO COLUMNS


  bedroomColumn.addCard(card1);
  kitchenColumn.addCard(card2);
  kitchenColumn.addCard(card3);
  kitchenColumn.addCard(card4);

});