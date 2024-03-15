<?php

use App\Http\Controllers\Calculator;



test('sum', function () {
//    $result = sum(1, 2);
    $calculator = new Calculator();
    $result = $calculator->sum(1,2);
 
    expect($result)->toBe(3);
});

it('performs sums', function () {
    $calculator = new Calculator();
    $result = $calculator->sum(1,2);
  
    //expect($result)->toBe(3);
    $this->assertSame(3,$result);

 });
 test('sums' ,function(){
    $calculator = new Calculator();
    $result = $calculator->sum(1,2);
    
    expect($result)->toBeGreaterThan(2);
   

 });
 it('hello' ,function(){
    expect('Hello World')->toContain('Hello');
 });


//  describe('sum', function () {
//     it('may sum integers', function () {
//         $calculator = new Calculator();
//         $result = $calculator->sum(1,2);
  
//         expect($result)->toBe(3);
//      });
  
//      it('may sum floats', function () {
//         $calculator = new Calculator();
//         $result = $calculator->sum(1.5,2.5);
  
//         expect($result)->toBe(4);
//      });
//  });

test('contain',function(){
    expect([1, 2, 3])->toContain(1);
    // expect([1, 2, 3])->toContainEqual('1', '2');
});
test('count',function(){
    expect(['Nuno', 'Luke', 'Alex', 'Dan'])->toHaveCount(4);
});
test('start with',function(){
    expect('Hello World')->toStartWith('Hello');
});
test('match',function(){
    expect('Hello World')->toMatch('/^hello wo./i');
});
test('each',function(){
    expect([1, 2, 3])->each->toBeInt();
    expect([1, 2, 3])->each->not->toBeString();
    expect([1, 2, 3])->each(fn ($number) => $number->toBeLessThan(4));
});
test('json',function(){
   expect('{"name":"Nuno","credit":100000.00}')
   ->json()
   ->toHaveCount(2)
   ->name->toBe('Nuno')
   ->credit->toBeFloat();
});


test('sequence',function(){
    expect([1,2,3])->sequence(
        fn($number)=> $number->toBe(1),
        fn($number)=> $number->toBe(2),
        fn($number)=> $number->toBe(3),
    );
});
test('sequence array',function(){
    expect(['hello'=>'world','foo'=>'bar','john'=>'doe'])->sequence(
        fn($value,$key) => $value->toEqual('world'),
        fn($value,$key) => $key->toEqual('foo'),
        fn($value,$key) => $value->toBeString(),
    );
});

//Data Sets

// it('has emails', function (string $email) {
//     expect($email)->not->toBeEmpty();
// })->with(['enunomaduro@gmail.com', 'other@example.com']);

it('has emails', function (string $name, string $email) {
    expect($email)->not->toBeEmpty();
})->with([
    ['Nuno', 'enunomaduro@gmail.com'],
    ['Other', 'other@example.com']
]);