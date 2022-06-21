using ContainLetters;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Ardalis.Specification;

namespace ContainLetters
{
    public class LetterSpecification : Specification<Letter>
    {
        public LetterSpecification()
        {

        }

        public string LetterContains { get; set; }

        public Specification<Letter> Build()
        {
            if (!string.IsNullOrEmpty(LetterContains))
            {
                Query.Where(f => f.LetterSub != null && f.LetterSub.ToLower().Contains(LetterContains.ToLower()));
            }
            return this;
        }
    }
}

