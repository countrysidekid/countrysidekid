using System;

namespace substraction
{
    class Program
    {
        static void Main(string[] args)
        {
            int firstNumber = 0;
            int secondNumber = 0;
            int result = 0;

            Console.Write("please enter the first number: ");
            firstNumber = int.Parse(Console.ReadLine());

            Console.Write("please enter the second number:");
            secondNumber = int.Parse(Console.ReadLine());

            result = firstNumber - secondNumber;
            Console.WriteLine("the answer is " + result );
        }
    }
}
