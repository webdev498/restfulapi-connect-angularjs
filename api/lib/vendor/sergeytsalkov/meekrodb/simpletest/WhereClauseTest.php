<?
class WhereClauseTest extends SimpleTest {
  function test_1_basic_where() {
    $where = new WhereClause('and');
    $where->add('username=%s', 'Bart');
    $where->add('password=%s', 'hello');
    
    $result = DB::query("SELECT * FROM accounts WHERE %l", $where->text());
    $this->assert(count($result) === 1);
    $this->assert($result[0]['age'] === '15');
  }
  
  function test_2_simple_grouping() {
    $where = new WhereClause('and');
    $where->add('password=%s', 'hello');
    $subclause = $where->addClause('or');
    $subclause->add('age=%i', 15);
    $subclause->add('age=%i', 14);
    
    $result = DB::query("SELECT * FROM accounts WHERE %l", $where->text());
    $this->assert(count($result) === 1);
    $this->assert($result[0]['age'] === '15');
  }
  
  function test_3_negate_last() {
    $where = new WhereClause('and');
    $where->add('password=%s', 'hello');
    $subclause = $where->addClause('or');
    $subclause->add('username!=%s', 'Bart');
    $subclause->negateLast();
    
    $result = DB::query("SELECT * FROM accounts WHERE %l", $where->text());
    $this->assert(count($result) === 1);
    $this->assert($result[0]['age'] === '15');
  }
  
  function test_4_negate_last_query() {
    $where = new WhereClause('and');
    $where->add('password=%s', 'hello');
    $subclause = $where->addClause('or');
    $subclause->add('username!=%s', 'Bart');
    $where->negateLast();
    
    $result = DB::query("SELECT * FROM accounts WHERE %l", $where);
    $this->assert(count($result) === 1);
    $this->assert($result[0]['age'] === '15');
  }
  
  function test_5_negate() {
    $where = new WhereClause('and');
    $where->add('password=%s', 'hello');
    $subclause = $where->addClause('or');
    $subclause->add('username!=%s', 'Bart');
    $subclause->negate();
    
    $result = DB::query("SELECT * FROM accounts WHERE %l", $where);
    $this->assert(count($result) === 1);
    $this->assert($result[0]['age'] === '15');
  }
  

}

?>
