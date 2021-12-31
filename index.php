<?php
include 'includes/head.php';
?>
<title>Coding Quizee | Home</title>
</head>
<body class="hom">
  <div class="container-fluid con">
    <?php
    include 'includes/navbar.php';
     ?>
    <div class="container-fluid con1">
      <h2 class="start">It's a programming quiz.</h2>
      <p class="start end">Here, you'll find the most comprehensive questions related to <br> programming languages.</p>
    </div>
  </div>

  <div class="container-fluid con2" id="c">

    <div class="row al">
      <div class="col-sm-3 im">
        <p class="imp_head">C</p>
        <p class="imp">C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to
          typical machine instructions.</p>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/C1.png" class="card-img-top" alt="...">
            <h5 class="card-title">Basic Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as data types, operators, expressions, control flow, functions and structures.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">C Basic</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is a basic level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 10 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=C Basic&short=c_b" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/C2.png" class="card-img-top" alt="...">
            <h5 class="card-title">Intermediate Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as pointers and arrays, input and output, structures and string operations.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">C Intermediate</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is an intermediate level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 15 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=C Intermediate&short=c_i" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/C3.png" class="card-img-top" alt="...">
            <h5 class="card-title">Advanced Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as c libraray, dynamic memory allocation and miscallaneous topics.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">C Advanced</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is an advanced level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 20 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=C Advanced&short=c_a" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid con2" id="ch">


    <div class="row al">
      <div class="col-sm-3 im">
        <p class="imp_head">C#</p>
        <p class="imp">C# is a general-purpose, multi-paradigm programming language encompassing static typing, strong typing, lexically scoped, imperative, declarative, functional, generic, object-oriented (class-based), and component-oriented
          programming disciplines.</p>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/CS1.png" class="card-img-top" alt="...">
            <h5 class="card-title">Basic Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as data types, variables, operators, looping, classes, arrays, strings and conditional statements.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">C# Basic</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is a basic level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 10 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=C# Basic&short=ca_b" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/CS2.png" class="card-img-top" alt="...">
            <h5 class="card-title">Intermediate Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as object oriented concepts, indexers, exception handling, console I/O operation and stream classes.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">C# Intermediate</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is an intermediate level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 15 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=C# Intermediate&short=ca_i" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/CS3.png" class="card-img-top" alt="...">
            <h5 class="card-title">Advanced Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as delegates, generics, linq, reflections, multithreaded programming, preprocessors and networking.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">C# Advanced</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is an advanced level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 20 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=C# Advanced&short=ca_a" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid con2" id="cp">


    <div class="row al">
      <div class="col-sm-3 im">
        <p class="imp_head">C++</p>
        <p class="imp">C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes". The language has expanded significantly over time, and modern C++ now has
          object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation.</p>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/C+1.png" class="card-img-top" alt="...">
            <h5 class="card-title">Basic Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as basic concepts, types, pointers, arrays, structures, functions and namespaces.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">C++ Basic</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is a basic level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 10 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=C++ Basic&short=cp_b" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/C+2.png" class="card-img-top" alt="...">
            <h5 class="card-title">Intermediate Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as classes, operator overloading, derived classes, exception handling and iterators .</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">C++ Intermediate</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is an intermediate level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 15 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=C++ Intermediate&short=cp_i" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/C+3.png" class="card-img-top" alt="...">
            <h5 class="card-title">Advanced Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as library, containers, streams, numerics and advanced conceps such as networking etc.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">C++ Advanced</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is an advanced level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 20 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=C++ Advanced&short=cp_a" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid con2" id="j">


    <div class="row al">
      <div class="col-sm-3 im">
        <p class="imp_head">Java</p>
        <p class="imp">Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let application developers write
          once, run anywhere (WORA), meaning that compiled Java code can run on all platforms that support Java without the need for recompilation.</p>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/J1.png" class="card-img-top" alt="...">
            <h5 class="card-title">Basic Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as data types, variables, arrays, operators, control statements, classes and methods.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">Java Basic</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is a basic level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 10 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=Java Basic&short=j_b" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/J2.png" class="card-img-top" alt="...">
            <h5 class="card-title">Intermediate Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as inheritance, exception handling, multithreading, interfaces, packages and generics.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop10">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">Java Intermediate</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is an intermediate level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 15 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=Java Intermediate&short=j_i" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/J3.png" class="card-img-top" alt="...">
            <h5 class="card-title">Advanced Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as awt, swing, I/O, java server technologies, servlet, java beans and jdbc.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop11">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">Java Advanced</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is an advanced level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 20 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=Java Advanced&short=j_a" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid con2" id="p">


    <div class="row al">
      <div class="col-sm-3 im">
        <p class="imp_head">Python</p>
        <p class="imp">Python is an interpreted high-level general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant indentation. Its language constructs as well as its
          object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.</p>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/P1.png" class="card-img-top" alt="...">
            <h5 class="card-title">Basic Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as data types, variables, operators, precedence, associativity, loops, and strings.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop12">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">Python Basic</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is a basic level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 10 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=Python Basic&short=p_b" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/P2.png" class="card-img-top" alt="...">
            <h5 class="card-title">Intermediate Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as lists, list comprehensions, tuples, sets, dictionary, polmorphism, and exception
              handling.</p>
              <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop13">
                Start Quiz
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title m_title" id="staticBackdropLabel">Python Intermediate</h5>
                      <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                      <p class="m_head">Instructions</p>
                      <ul type="circle m_point">
                        <li>It is an intermediate level quiz.</li>
                        <li>It consists of ten programming related questions.</li>
                        <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                        <li>Be careful while selecting options, only once you can select.</li>
                        <li>There's a time limit of 15 minutes. After time limit, quiz automatically closes.</li>
                        <li>Now, you can start quiz.</li>
                      </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                      <a class="btn btn-primary btn1" href="questions/index_questions.php?type=Python Intermediate&short=p_i" role="button">Start Quiz</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <img src="css/P3.png" class="card-img-top" alt="...">
            <h5 class="card-title">Advanced Level</h5>
            <p class="card-text">This quiz consists of questions related to topics such as shallow copy vs deep copy, recursion, mapping, modules, regular expressions and files.</p>
            <button type="button" class="btn btn-primary btn3" data-bs-toggle="modal" data-bs-target="#staticBackdrop14">
              Start Quiz
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop14" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title m_title" id="staticBackdropLabel">Python Advanced</h5>
                    <button type="button" class="btn-close but3" data-bs-dismiss="modal" aria-label="Close">X</button>
                  </div>
                  <div class="modal-body">
                    <p class="m_head">Instructions</p>
                    <ul type="circle m_point">
                      <li>It is an advanced level quiz.</li>
                      <li>It consists of ten programming related questions.</li>
                      <li>1 point will be awarded for every correct answer and no point will be deducted for other cases.</li>
                      <li>Be careful while selecting options, only once you can select.</li>
                      <li>There's a time limit of 20 minutes. After time limit, quiz automatically closes.</li>
                      <li>Now, you can start quiz.</li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn2" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-primary btn1" href="questions/index_questions.php?type=Python Advanced&short=p_a" role="button">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

<?php include 'includes/footer.php' ?>

</html>
