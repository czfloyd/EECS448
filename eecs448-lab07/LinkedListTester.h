/* -----------------------------------------------------------------------------
 *
 * @file  linkedlisttester.h
 * @author Colin Floyd
 * @brief  This file defines all of the automatic tests that are run by default with the -t flag
 * @date 2/2/18
 *
 ---------------------------------------------------------------------------- */

#ifndef LINKED_LIST_TESTER_H
#define LINKED_LIST_TESTER_H

#include "LinkedListOfInts.h"

class LinkedListTester {
private:
  void test01();
  void test02();
  void test03();
  void test04();
  void test05();
  void test06();
  void test07();
  void test08();
  void test09();
  void test10();
  void test11();
  void test12();
  void test13();
  void test14();

  void printVector(std::vector<int>);

public:
  /**
  * @pre None
  * @post Will run all the myriad of tests and report their results
  * @param N/A
  * @throw N/A
  * @return N/A
  **/
  void runTests();
};

#endif
