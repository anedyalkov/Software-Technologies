using System;
using System.Linq;
using System.Web.Mvc;
using TeisterMask.Models;

namespace TeisterMask.Controllers
{
    [ValidateInput(false)]
    public class TaskController : Controller
    {
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            // TODO: Implement me...
            using (var db = new TeisterMaskDbContext())
            {
                var tasks = db.Tasks.ToList();
                return View(tasks);
            }
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            // TODO: Implement me...
            return View();
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Task task)
        {
            // TODO: Implement me...
            if (ModelState.IsValid)
            {
                using (var db = new TeisterMaskDbContext())
                {
                    db.Tasks.Add(task);
                    db.SaveChanges();
                }

                return RedirectToAction("Index");
            }

            return View(task);
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int id)
        {
            // TODO: Implement me...
            using (var db = new TeisterMaskDbContext())
            {
                var task = db.Tasks.Find(id);

                if (task == null)
                {
                    return HttpNotFound();
                }

                return View(task);
            }
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int id, Task task)
        {
            // TODO: Implement me...
            if (!ModelState.IsValid)
            {
                return View(task);
            }
            using (var db = new TeisterMaskDbContext())
            {
                var taskFromDb = db.Tasks.Find(id);

                if (taskFromDb == null)
                {
                    return HttpNotFound();
                }

                taskFromDb.Title = task.Title;
                taskFromDb.Status = task.Status;
                db.SaveChanges();
            }
            return Redirect("/");
        }
    }
}
