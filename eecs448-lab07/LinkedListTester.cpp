/* -----------------------------------------------------------------------------
 *
 * @file  linkedlisttester.cpp
 * @author Colin Floyd
 * @brief  This file performs the 21 tests desired by the automatic testing flag
 * @date 2/2/18
 *
 ---------------------------------------------------------------------------- */

#include "LinkedListTester.h"
#include <iostream>
#include <vector>

void LinkedListTester::runTests(){
  test01();
  test02();
  test03();
  test04();
  test05();
  test06();
  test07();
  test08();
  test09();
  test10();
  test11();
  test12();
  test13();
  test14();
}

void LinkedListTester::test01(){
  std::cout << "Test #1: empty list is recognized as empty ";

  LinkedListOfInts* myList = new LinkedListOfInts();

  if (myList->isEmpty())
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test02(){
  std::cout << "Test #2: filled list is recognized as not empty ";

  LinkedListOfInts* myList = new LinkedListOfInts();
  for (int i = 1; i <= 10; i++){
    myList->addBack(i);
  }

  if (!myList->isEmpty())
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test03(){
  std::cout << "Test #3: size of empty list is zero ";

  LinkedListOfInts* myList = new LinkedListOfInts();

  if (myList->size() == 0)
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";
}

void LinkedListTester::test04(){
  std::cout << "Test #4: length value adjusts if node is added at front ";

  LinkedListOfInts* myList = new LinkedListOfInts();
  for (int i = 1; i <= 10; i++){
    myList->addBack(i);
  }
  myList->addFront(111);

  if (myList->size() == 11)
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test05(){
  std::cout << "Test #5: length value adjusts if node is added at back ";

  LinkedListOfInts* myList = new LinkedListOfInts();
  for (int i = 1; i <= 10; i++){
    myList->addBack(i);
  }
  myList->addBack(111);

  if (myList->size() == 11)
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test06(){
  std::cout << "Test #6: length adjusts if node is deleted from front ";

  LinkedListOfInts* myList = new LinkedListOfInts();
  for (int i = 1; i <= 10; i++){
    myList->addBack(i);
  }
  myList->removeFront();

  if (myList->size() == 9)
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test07(){
  std::cout << "Test #7: length adjusts if node is delted from back ";

  LinkedListOfInts* myList = new LinkedListOfInts();
  for (int i = 1; i <= 10; i++){
    myList->addBack(i);
  }
  myList->removeBack();

  if (myList->size() == 9)
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test08(){
  std::cout << "Test #8: return false if deleting from empty list ";

  LinkedListOfInts* myList = new LinkedListOfInts();

  if (!myList->removeFront())
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test09(){
  std::cout << "Test #9: clearing works correctly on an empty list ";

  LinkedListOfInts* myList = new LinkedListOfInts();
  while (myList->removeFront()){}

  if (myList->size() == 0)
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test10(){
  std::cout << "Test #10: clearing works correctly on a full list ";

  LinkedListOfInts* myList = new LinkedListOfInts();
  for (int i = 1; i <= 10; i++){
    myList->addBack(i);
  }
  while (myList->removeFront()){}

  if (myList->size() == 0)
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test11(){
  std::cout << "Test #11: search finds value inserted at back ";

  LinkedListOfInts* myList = new LinkedListOfInts();
  for (int i = 1; i <= 10; i++){
    myList->addBack(i);
  }
  myList->addFront(111);

  if (myList->search(5))
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test12(){
  std::cout << "Test #12: search finds value inserted at front ";

  LinkedListOfInts* myList = new LinkedListOfInts();
  for (int i = 1; i <= 10; i++){
    myList->addBack(i);
  }
  myList->addFront(111);

  if (myList->search(111))
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test13(){
  std::cout << "Test #13: addBack actually adds to the back ";

  LinkedListOfInts* myList = new LinkedListOfInts();
  std::vector<int> v;
  for (int i = 1; i <= 10; i++){
    myList->addBack(i);
    v.push_back(i);
  }

  if (myList->toVector() == v)
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::test14(){
  std::cout << "Test #14: addFront actually adds to the front ";

  LinkedListOfInts* myList = new LinkedListOfInts();
  std::vector<int> v;
  for (int i = 1; i <= 10; i++){
    myList->addFront(i);
    v.insert(v.begin(), i);
  }

  if (myList->toVector() == v)
    std::cout << "PASSED\n";
  else
    std::cout << "FAILED\n";

  delete myList;
}

void LinkedListTester::printVector(std::vector<int> v){
  std::cout << "[";
  for (unsigned int i = 0; i < v.size(); i++){
    std::cout << v[i] << ", ";
  }
  std::cout << "]";
}
