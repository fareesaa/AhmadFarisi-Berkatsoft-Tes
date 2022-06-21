using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Ardalis.Specification;

namespace ContainLetters
{
    public class LetterServices : Specification<Letter>

    {
        public LetterServices()
        {

        }

        public string LetterContains { get; set; }
        public async Task<bool> ContainLetter3(Letter letter)
        {
            LetterContains = string.Empty;

            letter.LetterGet = "BERKATsoft"; // ex
            letter.LetterSub = "brs";
            if (letter.LetterSub != null)
            {
                if (!string.IsNullOrEmpty(letter.LetterGet))
                {
                    Query.Where(f => f.LetterSub != null && f.LetterSub.ToLower().Contains(letter.LetterGet.ToLower()));
                    letter.Status = true;
                }
                else
                {
                    letter.Status = false;
                }
            }
            await Task.FromResult(0);
            return true;
        }
    }
}
